/* 
 * AP(r) Computer Science GridWorld Case Study:
 * Copyright(c) 2005-2006 Cay S. Horstmann (http://horstmann.com)
 *
 * This code is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation.
 *
 * This code is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * @author DengQuanWen
 */
package info.gridworld.actor;
import info.gridworld.grid.Grid;
import info.gridworld.grid.Location;

import java.util.ArrayList;
/**
 * QuickCrab that extends CrabCritter. A QuickCrab
*processes actors the same way a CrabCritter does. A QuickCrab
*moves to one of the two locations, randomly selected, that are two spaces to its
*right or left, if that location and the intervening location are both empty.
*Otherwise, a QuickCrab moves like a CrabCritter.
 */

public class QuickCrab extends CrabCritter
{
    public ArrayList<Location> getMoveLocations()
    {
        boolean flag = true;//Flag to ensure no near loc can be added when there is a far one.
    	ArrayList<Location> locs = new ArrayList<Location>();
        Grid gr = getGrid();
        int[] dirs =
            { Location.LEFT, Location.RIGHT };
        for (int d : dirs)
        	{
        	Location loc = getLocation().getAdjacentLocation(getDirection() + d);
        	if (!gr.isValid(loc))
        		continue;
            if (getGrid().get(loc) == null)
            {
            	Location locq = loc.getAdjacentLocation(getDirection() + d);
            	if (!gr.isValid(locq))
            		{
            		if (flag) locs.add(loc);
            		continue;
            		}
            	if (getGrid().get(locq) == null)
            		{
            		locs.add(locq);
            		flag = false;
            		}
            	else if (flag) 
            		locs.add(loc);
            }
        }

        return locs;
    }
}
//getAdjacentLocation